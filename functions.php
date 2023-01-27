<?php	
				
                function get_item_html($item) {
                    $output = "<div class='item-web' >"
                    . "<span class='btn-ff'>news</span>"
                    ."<img src='" . $item["news_image"] . "' alt='' class='img-responsive'/>"
                    . "<div class='articles-grid'>"
                    . "<span class='h2'><strong> " . $item['news_title'] . " </strong></span>"
                    ."</br>"
                    . "<span class='p'>" .$item['news_description'] . " "
                    . "</br>"
                    . "</span>"
                    . "<span class='btn-container'>"
                    . "<span class='btn-articles'>Read More</span>"
                    . "</span>"
                    . "</span>"
                    . "<div class='line'></div>"
                    . "<img src='" . $item["news_images2"] . "' alt='' class='avatar'/>"
                    . "<div class='details'> " .$item['author'] . "<br> <span class='d-text'> ". $item['news_date'] . "</span></div>"
                    . "</br>"
                    . "</div>"
                    . "</div>";
                
                    return $output;
                }
                

function random_catalog_array() {
    include("./database.php");

    try {
        $result = $connection -> query(
        "SELECT news_image, news_images2, news_title, news_description, author, news_date 
        FROM news_tables
        ");
    } catch(Exception $e) {
        echo "Results cannot be seen";
        exit;
    }
    $catalog = $result -> fetchAll();
    return $catalog;
}


//////////// OFFICE ////////////////////

function get_office($contact) {
    $output2 = "<div class='item-web' >"
    . "<img src='" . $contact["office_image"] . "' alt='' class='img-responsive'/>"
    . "<div class='articles-grid'>"
    . "<span class='h2'><strong> " . $contact['office_title'] . " </strong></span>"
    . "</br>"
    . "<span class='p'>" ."</br>" .$contact['office_desceiption'] . "</br>"
    . "</br>"
    . "</span>"
    . "</br>"
    . "<span class='telephone_num'>" .$contact['office_telephone'] . " "
    . "</span>"
    . "</br>"
    . "<span class='btn-container'>"
    . "<span class='btn-articles'>View More</span>"
    . "</span>"
    . "</span>"
    . "</br>"
    . "</div>"
    . "</div>";

    return $output2;
}

function print_office() {
    include("./database_office.php");

    try {
        $result2 = $connection_office -> query(
        "SELECT office_image, office_title, office_desceiption, office_telephone
        FROM office_tables
        ");
    } catch(Exception $e) {
        echo "Results cannot be seen";
        exit;
    }
    $print_office = $result2 -> fetchAll();
    return $print_office;
}