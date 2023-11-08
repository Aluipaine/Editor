<?php

require "../vendor/config.php";
include('../header.php');

?>
<!-- Stark
Westface
P20 Varasto
P20 K-krs
Peltineloset
Kannatuspalvelu
Toimisto
Muu -->
<!-- $pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$project_id' ");
            $_pr_name = mysqli_fetch_all($pr_name_);
            $pr_name = $_pr_name[0][1]; -->

<style>
    .loose_container {
        padding: 0 2%;
    }
    img {
        max-width: 165px;
    }
    section {
        cursor: pointer;
        padding: 0;
    }
    section h3 {
        padding: 10px 45px;
    }
    .firstrow td {
        font-weight: bold;
    }
    tr td:nth-child(1),
    tr td:nth-child(2),
    table.hidden {
        display: none;
    }

    section:target {
        -webkit-box-shadow: -1px 0px 28px -6px rgba(255,221,0,1);
        -moz-box-shadow: -1px 0px 28px -6px rgba(255,221,0,1);
        box-shadow: -1px 0px 28px -6px rgba(255,221,0,1);
    }
</style>
<section id="ordertable">
    <h1>Tilauskirja</h1>
    <div class="loose_container">
        <?php
            $_shopslist = mysqli_query($db, "SELECT `shop` FROM `shoppinglist`");
            $shopslist = mysqli_fetch_all($_shopslist);
            $shopslist = array_unique($shopslist, SORT_REGULAR);


            foreach ($shopslist as $shop) {
                echo '<br><hr><br><section id="'.strtolower(str_replace('ö','a',str_replace('ä','a',str_replace('-','',str_replace(' ','',$shop[0]))))).'"><h3 style="text-transform:uppercase;" onclick="this.parentElement.querySelector(`table`).classList.toggle(`hidden`);">'.$shop[0].'</h3><br>';
                $_shoppinglist = mysqli_query($db, "SELECT * FROM `shoppinglist` WHERE `shop`='$shop[0]' ");
                $shoppinglist = mysqli_fetch_all($_shoppinglist);
                echo '<table class="hidden">
                    <tr class="firstrow">
                        <td>Comment ID</td>
                        <td>Comment ID2</td>
                        <td>Projekti</td>
                        <td>Huone</td>
                        <td>Mitä</td>
                        <td>KPL</td>
                        <td>Kauppa</td>
                        <td>Käyttötarkoitus</td>
                        <td>Tilaus pvm</td> 
                        <td>Status</td> 
                        <td>Deadline</td> 
                        <td>Kuvat</td> 
                        <td>Hinta</td> 
                        <td>Pituus</td> 
                        <td>Keneltä</td> 
                        <td>Noutaja</td> 
                        <td>Onko laskutettu?</td> 
                    </tr>';
                    
                foreach ($shoppinglist as $sl) {
                    echo '<tr>';

                    // $sl[4] + $sl[5] + $sl[6] + $sl[7] + $sl[10] + $sl[12] + $sl[13]+ $sl[14] + $sl[15]
                    
                    $cellcount = 0;
                    foreach ($sl as $s) {
                        $cellcount+=1;
                        if($cellcount == 3) {
                            $pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$s' ");
                            $_pr_name = mysqli_fetch_all($pr_name_);
                            $pr_name = $_pr_name[0][1];
                            echo '<td>'.$pr_name.'</td>';
                        }
                        else if($cellcount == 10) {
                            
                            echo '<td><button onclick="changestatus('.$sl.',this)">'.ucfirst($s).'</button></td>';
                        }
                        else if($cellcount == 12) {
                            
                            echo '<td><a href="'.$s.'"><img src="'.$s.'"/></a></td>';
                        }
                        else if($cellcount == 11) {
                            $pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$s' ");
                            $_pr_name = mysqli_fetch_all($pr_name_);
                            $pr_name = $_pr_name[0][1];
                            echo '<td>'.$pr_name.'</td>';
                        }
                        else if($cellcount == 5 || $cellcount == 6 || $cellcount == 7 || $cellcount == 8 || $cellcount == 11 || $cellcount == 13 || $cellcount == 14 || $cellcount == 15 || $cellcount == 16) {
                            echo '<td><textarea class="update_shoppingitem_data" name="'.$sl[0].'" value="'.ucfirst($s).'" oninput="update__shoppinglist_item(this);" type="text"/>'.ucfirst($s).'</textarea></td>';
                        }
                        else if($cellcount == 6 || $cellcount == 13) {
                            echo '<td><input class="update_shoppingitem_data" name="'.$sl[0].'" value="'.ucfirst($s).'" oninput="update__shoppinglist_item(this);" type="number"/></td>';
                        }
                        else {
                            echo '<td>'.ucfirst($s).'</td>';

                        }
                    }
                    echo '</tr>';
                }
                echo '</table></section><br>';
            }
        ?>
    </div>
</section>

<script src='/js/jquery.min.js'></script>
<script>
    function changestatus(statusarray,item) {
        if(item.innerText.toLowerCase() == "toimitettu") {
            item.parentElement.parentElement.style.background = "white";
            item.innerText = 'Pyydetty';
        }
        else if(item.innerText.toLowerCase() == "pyydetty") {
            item.parentElement.parentElement.style.background = "orange";
            item.innerText = 'Noudettu';
        }
        else if(item.innerText.toLowerCase() == "noudettu") {
            item.parentElement.parentElement.style.background = "green";
            item.innerText = 'Toimitettu';
        }


        setTimeout(function () {
            _item_id = parseFloat(item.parentElement.parentElement.querySelectorAll("td")[0].innerText);
            _item_status = item.innerText;

            formData = {
                item_id: _item_id,
                item_status: _item_status
            };

            $.ajax({
            type: "POST",
            url: "../vendor/modifyshoppinglistitem.php",
            data: formData,
            error: function (jqxhr, status, exception) {
                alert('Tietokantavirhe, soita numeroon +358449782028');
                console.log(formData);
            }
            }).done(function (data) {
                // alert(data);
                // location.reload();
            });
        }, 1500);

    }

    function initializestatuses() {
        cells = document.querySelectorAll("td");
        for (let i = 0; i < cells.length; i++) {
            if(cells[i].innerText.toLowerCase() == "pyydetty") {
                cells[i].parentElement.style.background = "white";
            }
            else if(cells[i].innerText.toLowerCase() == "noudettu") {
                cells[i].parentElement.style.background = "orange";
            }
            else if(cells[i].innerText.toLowerCase() == "toimitettu") {
                cells[i].parentElement.style.background = "green";
            }
        }
    }

    initializestatuses();

    function update__shoppinglist_item(item) {
        _item_id = item.getAttribute("name");

        p_elem = item.parentElement.parentElement;
        data_elems = p_elem.querySelectorAll(".update_shoppingitem_data");
        setTimeout(function () {

            _item_name = data_elems[0].value;
            _item_kpl = data_elems[1].value;
            _item_shop = data_elems[2].value;
            _item_meaning = data_elems[3].value;
            _item_price = data_elems[4].value;
            _item_measures = data_elems[5].value;
            _item_from = data_elems[6].value;
            _item_to = data_elems[7].value;

        
            formData = {
                item_id: _item_id,
                item_name: _item_name,
                item_kpl: _item_kpl,
                item_shop: _item_shop,
                item_meaning: _item_meaning,
                item_price: _item_price,
                item_measures: _item_measures,
                item_from: _item_from,
                item_to: _item_to,
            };

            $.ajax({
            type: "POST",
            url: "../vendor/modifyshoppinglistitem_data.php",
            data: formData,
            error: function (jqxhr, status, exception) {
                alert('Tietokantavirhe, soita numeroon +358449782028');
                console.log(formData);
            }
            }).done(function (data) {
                console.log(data);
                // location.reload();
            });
        }, 1500);
    }
</script>
</body>

</html>