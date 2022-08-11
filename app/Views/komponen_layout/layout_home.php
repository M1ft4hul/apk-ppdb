<?= $this->include('komponen_layout/head') ?>

<body class="alt-menu sidebar-noneoverflow">
	<!-- BEGIN LOADER -->
	<div id="load_screen">
		<div class="loader">
			<div class="loader-content">
				<div class="spinner-grow align-self-center"></div>
			</div>
		</div>
	</div>
	<!--  END LOADER -->

	<!--  BEGIN NAVBAR  -->
	<?= $this->include('komponen_layout/navbar') ?>
	<!--  END NAVBAR  -->

	<!--  BEGIN MAIN CONTAINER  -->
	<div class="main-container" id="container">

		<div class="overlay"></div>
		<div class="search-overlay"></div>

		<!--  BEGIN CONTENT PART  -->
		<div id="content" class="main-content">
			<div class="layout-px-spacing">

				<!--content home pertama -->
				<?= $this->renderSection('content') ?>



				<!-- footer -->
				<?= $this->include('komponen_layout/footer') ?>

			</div>
		</div>
		<!--  END CONTENT PART  -->

		<?= $this->include('komponen_layout/js') ?>