<section class="w-full text-gray-500 flex flex-wrap">

        <?php foreach ($params['posts'] as $post) : ?>
            <div class="w-1/3 p-3">
                <div class="bg-gray-800 rounded-2xl mb-5 px-8 py-16">

                    <h2 class="text-2xl font-medium text-white title-font mb-2"><?= $post->title ?></h2>
                    <p class="leading-relaxed text-justify"><?= $post->getExcerpt(); ?></p>
                    <a class="text-blue-500 inline-flex items-center my-4" href="/php_mvc/posts/<?= $post->id ?>">Lire plus
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>

                    <div class="text-center mt-8">
                        <p>
                            <?php foreach ($post->getTags() as $tag) : ?>
                                <span class="tracking-widest font-medium title-font text-white">
                                    <a href="/php_mvc/tags/<?= $tag->id ?>" class="text-white">
                                        <?= $tag->name ?>
                                    </a>
                                </span>
                            <?php endforeach ?>
                        </p>
                        <span class="mt-1 text-gray-600 text-sm"><?= $post->getCreatedAt() ?></span>
                    </div>

                </div>
            </div>
        <?php endforeach ?>

</section>