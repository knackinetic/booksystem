<div component="code-highlighter" class="card content-wrap auto-height">
    <h2 class="list-heading">{{ trans('settings.webhooks_format_example') }}</h2>
    <p>{{ trans('settings.webhooks_format_example_desc') }}</p>
    <pre><code class="language-json">{
    "event": "page_update",
    "text": "Benny updated page \"My wonderful updated page\"",
    "triggered_at": "2021-12-11T22:25:10.000000Z",
    "triggered_by": {
        "id": 1,
        "name": "Benny",
        "slug": "benny"
    },
    "triggered_by_profile_url": "https://bookstack.local/user/benny",
    "webhook_id": 2,
    "webhook_name": "My page update webhook",
    "url": "https://bookstack.local/books/my-awesome-book/page/my-wonderful-updated-page",
    "related_item": {
        "id": 2432,
        "book_id": 13,
        "chapter_id": 554,
        "name": "My wonderful updated page",
        "slug": "my-wonderful-updated-page",
        "priority": 2,
        "created_at": "2021-12-11T21:53:24.000000Z",
        "updated_at": "2021-12-11T22:25:10.000000Z",
        "created_by": 1,
        "updated_by": 1,
        "draft": false,
        "revision_count": 9,
        "template": false,
        "owned_by": 1
    }
}</code></pre>
</div>