<?php
/**
 * @var $pdo /PDO
 */
require_once "../../database.php";
require_once "../../functions.php";

$title = '';
$price = '';
$description = '';
$errors = [];
$product = [
	'image' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	require_once "../../validate_product.php";

	if (empty($errors)) {
		$statement = $pdo->prepare("INSERT INTO products 
		(title, image, description, price, create_date) 
		VALUES (:title, :image, :description, :price, :date)");
		$statement->bindValue(':title', $title);
		$statement->bindValue(':image', $imagePath);
		$statement->bindValue(':description', $description);
		$statement->bindValue(':price', $price);
		$statement->bindValue(':date', date('Y-m-d H:i:s'));
		$statement->execute();
		header('Location: index.php');
	}
}
?>

<?php include_once '../../views/partials/header.php' ?>
	<div>
		<a href="index.php" class="btn btn-secondary">Go back to Products</a>
	</div>
	<h1>Create new Product </h1>

	<?php include_once '../../views/products/form.php' ?>

</body>
</html>