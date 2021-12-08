<?php

namespace BookStack\Actions;

use BookStack\Interfaces\Loggable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $endpoint
 * @property Collection $trackedEvents
 */
class Webhook extends Model implements Loggable
{
    protected $fillable = ['name', 'endpoint'];

    use HasFactory;

    /**
     * Define the tracked event relation a webhook.
     */
    public function trackedEvents(): HasMany
    {
        return $this->hasMany(WebhookTrackedEvent::class);
    }

    /**
     * Update the tracked events for a webhook from the given list of event types.
     */
    public function updateTrackedEvents(array $events): void
    {
        $this->trackedEvents()->delete();

        $eventsToStore = array_intersect($events, array_values(ActivityType::all()));
        if (in_array('all', $events)) {
            $eventsToStore = ['all'];
        }

        $trackedEvents = [];
        foreach ($eventsToStore as $event) {
            $trackedEvents[] = new WebhookTrackedEvent(['event' => $event]);
        }

        $this->trackedEvents()->saveMany($trackedEvents);
    }

    /**
     * Check if this webhook tracks the given event.
     */
    public function tracksEvent(string $event): bool
    {
        return $this->trackedEvents->pluck('event')->contains($event);
    }

    /**
     * Get a URL for this webhook within the settings interface.
     */
    public function getUrl(string $path = ''): string
    {
        return url('/settings/webhooks/' . $this->id . '/' . ltrim($path, '/'));
    }

    /**
     * Get the string descriptor for this item.
     */
    public function logDescriptor(): string
    {
        return "({$this->id}) {$this->name}";
    }
}
