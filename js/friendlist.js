    function getDetails(friendName, friendRollNum, friendBranch){
    
        document.getElementById("friendName")
            .innerHTML = friendName;
    
        document.getElementById("inputFriendRollNum")
            .value = friendRollNum;


        document.getElementById("friendDetails")
            .innerHTML = friendBranch + " " + friendRollNum;
     

        $('form#previousChatForm').submit();

    }

    function getFriends(username, rollnum, branch){
        
        var userName = document.createTextNode(username);
        var userMetaId = document.createTextNode(rollnum);
        var userMetaBranch = document.createTextNode(branch);
        
        var userMetaSpace = document.createTextNode(" ");


        var parent = document.getElementById("friend-list");

        var cardDiv = document.createElement("div");
        cardDiv.className = "ui raised fluid card";

        parent.appendChild(cardDiv);

        var contentDiv = document.createElement("div");
        contentDiv.className = "content";

        cardDiv.appendChild(contentDiv);

        var headerDiv = document.createElement("div");
        headerDiv.className = "ui small header";

        contentDiv.appendChild(headerDiv);

        var name = document.createElement("a");
        name.className = "ui header";
        
        headerDiv.appendChild(name);
        name.appendChild(userName);

        var userAvatar = document.createElement("img");
        userAvatar.src = "img/characters/robin.png";
        userAvatar.className = "ui friendlist massive circular image right floated";

        headerDiv.appendChild(userAvatar);

        var userMeta = document.createElement("div");
        userMeta.className = "meta";
        userMeta.appendChild(userMetaBranch);
        userMeta.appendChild(userMetaSpace);
        userMeta.appendChild(userMetaId);

        contentDiv.appendChild(userMeta);
        
        cardDiv.onclick = function(){
            getDetails(username, rollnum, branch);
            
/*
            $.getScript( "chatbox.php" )
                .done(function( script, textStatus ) {
                    sendMessage(username, rollnum, branch);
            });            
*/
        };
        
    }