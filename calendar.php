<?php 
    include 'header.php';
?>
<link type="text/css" rel="stylesheet" href="css/todo.css">
<script type="text/javascript" src="js/todo.js"></script>
<br>
<div class="ui container">
    <div class="ui grid">
                
        <div class="nine wide column">
     
            <div class="ui raised stackable doubling fluid card">
                <div class="content">
                    <div class="header">
                        Create an Event:
                    </div>
                    <div class="ui divider"></div>

                    <div class="description">
                        <div class="ui fluid icon input">
                            <i class="calendar icon"></i>
                            <input type="text" id="titleinput" placeholder="Event Title">
                        </div>
                        
                        <div class="ui divider"></div>
                        
                        <div class="ui input">
                            <input type="date" 
                                   id="dateInput"
                                   placeholder="Date">
                        </div>

                        <div class="ui primary button" 
                             id="addBtn"
                             onclick="newElement()"> 
                            Add
                        </div>
                    </div>
                </div>

                    <div class="extra content" id="tableDiv">
                        <ul id="myUL">
                        </ul>
                    </div>
            </div>
        </div>
        <div class="column">
            <div class="ui vertical divider" style="height: auto;"></div>        
        </div>
        
        <div class="six wide column">
            <?php 
                include 'notification.php';
            ?>
            
            <div class="ui red large button" onclick="addInput()">Add</div>
            <div id="addInputDiv"></div>
        </div>
    </div>
</div>