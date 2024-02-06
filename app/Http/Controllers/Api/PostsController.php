<?php
    namespace App\Http\Controllers\Api;

    use App\Models\Post;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

    class PostsController extends Controller
    {
        // use DisablePagination; function disable pagination;

        protected $model = Post::class;

        public function searchableBy(): array
        {
            return ['title', 'body','category'];
        }

        public function filterableBy(): array
        {
            return [
                'title',
                'body',
                'created_at',
                'updated_at',
                'category',
            ];
        }

        public function sortableBy(): array
        {
            return ['title', 'category'];
        }

        public function exposedScopes(): array
        {
            return ['published', 'whereCategory'];
        }
    }
?>