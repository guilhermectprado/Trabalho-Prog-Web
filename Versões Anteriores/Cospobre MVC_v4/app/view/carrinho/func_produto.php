<?php 

function getProducts($con){
	$sql = "SELECT *  FROM produtos ";
	$stmt = $con->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByIds($con, $ids) {
	$sql = "SELECT * FROM produtos WHERE id IN (".$ids.")";
	$stmt = $con->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}