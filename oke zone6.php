<?php
include('../WEB/simple_html_dom.php');
 
$articles = array();
getArticles('http://techno.okezone.com/breaking/56');

function getArticles($page) {
    global $articles;
 
    $html = new simple_html_dom();
    $html->load_file($page);
 
    // ... more ...
}
$items = $html->find('div[class=subkanal]'); 
 
foreach($items as $post) {
    # remember comments count as nodes
    $articles[] = array($post->children(3)->outertext,
                        $post->children(6)->first_child()->outertext);
}
?>
<?php
    foreach($articles as $item) {
        echo "<div class='item'>";
        echo $item[0];
        echo $item[1];
        echo "</div>";
    }
?>
