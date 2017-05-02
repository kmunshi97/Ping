
/*
        <!--A single list-item starts here!-->
        <div class="item">
            <img class="ui small circular image"
                 src="img/characters/nick-fury.jpg">
            
            <div class="content">
                <a class="ui large header">
                    Kanishka Munshi
                </a>

                <span class="ui meta">
                    CSE &ensp; 2015121
                </span>

            </div>

            <div class="right floated extra content">
                <a class="ui big teal icon label">
                    <i class="mail icon"></i>
                    kanishkamunshi@iiitdmj.ac.in
                </a>
                <div class="ui divider"></div>
                
                <div class="ui right floated fluid primary button" 
                     style="margin-bottom: 0;">
                    <i class="large add user icon"></i>
                    Add Friend!
                </div>
            </div>
        </div><!--A single list-item ends here!-->
*/

function getUsers(username, rollnum, branch, mail){
    
    var userName = document.createTextNode(username);
    var userRollNum = document.createTextNode(rollnum);
    var userBranch = document.createTextNode(branch);
    var userMail = document.createTextNode(mail);
    var userAddFriend = document.createTextNode("Add Friend");
    var userSpace = document.createTextNode(" ");        

    var parent = document.getElementById("users-list");

    var itemDiv = document.createElement("div");
        itemDiv.className = "item";
    
    var userAvatar = document.createElement("img");
        userAvatar.className = "ui small circular image";
        userAvatar.src = "img/characters/nick-fury.jpg";
    
    var contentDiv = document.createElement("div");
        contentDiv.className = "content";

    var headerDiv = document.createElement("div");

    var name = document.createElement("a");
        name.className = "ui large header";

    var userMeta = document.createElement("div");
        userMeta.className = "ui meta";
        userMeta.appendChild(userBranch);
        userMeta.appendChild(userSpace);
        userMeta.appendChild(userRollNum);

    var extraDiv = document.createElement("div");
        extraDiv.className = "right floated extra content";
    
    var mailButton = document.createElement("a");
        mailButton.className = "ui big teal icon button";
   
    var addFriendButton = document.createElement("a");
        addFriendButton.className = "ui right floated primary button";
    
    var mailIcon = document.createElement("i");
        mailIcon.className = "mail icon";

    var addUserIcon = document.createElement("i");
        addUserIcon.className = "large add user icon";

    var dividerDiv = document.createElement("div");
        dividerDiv.className = "ui divider";


    parent.appendChild(userAvatar);    
    parent.appendChild(contentDiv);    
    parent.appendChild(extraDiv);
    
    contentDiv.appendChild(headerDiv);
    contentDiv.appendChild(userMeta);
    
    extraDiv.appendChild(mailButton);
    extraDiv.appendChild(dividerDiv);
    extraDiv.appendChild(addFriendButton);
    
    headerDiv.appendChild(name);
    headerDiv.appendChild(name);
    name.appendChild(userName);

    mailButton.appendChild(mailIcon);
    mailButton.appendChild(userMail);
        
    addFriendButton.appendChild(addUserIcon);
    addFriendButton.appendChild(userAddFriend);
}