
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
		<div class="container">
		<a class="navbar-brand" href="<?= BASE_URL ?>">Trang Chủ</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto" style="color:black;" >
                    <?php foreach ($_SESSION['category'] as $item) {?>
					<li class="nav-item "><a href="<?= BASE_URL . "category?id=$item->id"?>" class="nav-link"><?= $item->name ?></a></li>
                    <?php } ?>
				</ul>
			</div>
		</div>
	</nav>