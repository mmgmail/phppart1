<?php
	include_once 'db.php';

	function articles_all() {
		$sql = "SELECT * FROM article ORDER BY dt DESC";
		$query = db_query($sql);
		return $query->fetchAll();
	}

	function get_one_article($id) {
        $sql = "SELECT * FROM article WHERE id = :id LIMIT 1";
        $query = db_query($sql, ['id' => $id]);
        return $query->fetch();
	}

	function add_article($title, $text) {
        $sql = "INSERT INTO article (title, text) VALUES (:title, :text)";
        $params = ['title' => $title, 'text' => $text];
	    $query = db_query($sql, $params);
        return true;
	}

	function update_article($title, $text, $id) {
        $sql = "UPDATE article SET title = :title, text = :text WHERE id = :id";
        $params = ['title' => $title, 'text' => $text, 'id' => $id];
	    $query = db_query($sql, $params);
	    return true;
	}

	function delete_article($id) {
        $sql = "DELETE FROM article WHERE id = :id";
        $params = ['id' => $id];
	    $query = db_query($sql, $params);
	    return true;
	}

	function unique_title($title) {
		$sql = "SELECT count(*) as cnt FROM article WHERE title = :title";
		$params = ['title' => $title];
	    $query = db_query($sql, $params);
	    return $query->fetch();
	}
?>