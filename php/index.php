<?php require_once './components/header.php'; ?>

<h2><?= $_GET["genre"] ?? "All books" ?></h2>
<section class="book">
    <a class="bookmark fa fa-star" href="set_favorite.php?add=0" target="_blank"></a>
    <h3>Book title</h3>
    <p class="publishing_info">
        <span class="author">Author</span>,
        <span class="year">Year</span>
    </p>
    <p class="description">Description</p>
</section>

<?php require_once './components/footer.php' ?>