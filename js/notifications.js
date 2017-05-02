function getNotifications(type, date, month, venue, prof, course){
    
    var notificationType = document.createTextNode(type);
    var notificationHeaderMeta = document.createTextNode("Expires: Today!");

    var dueDate = document.createTextNode("Date: ");
    var date = document.createTextNode(date);
    var month = document.createTextNode(month + " ");
    
    var dueVenue = document.createTextNode("Venue: ");
    var venue = document.createTextNode(venue);
    
    var proffessor = document.createTextNode(prof);
    var course = document.createTextNode(course);
    var userMetaSpace = document.createTextNode(" ");

    
    var parent = document.getElementById("notification-list");
    
    var cardDiv = document.createElement("div");
    cardDiv.className = "ui fluid card";

    parent.appendChild(cardDiv);
    
    var contentDiv = document.createElement("div");
    contentDiv.className = "content";

    cardDiv.appendChild(contentDiv);

    var headerDiv = document.createElement("div");
    headerDiv.className = "ui dividing header";
    
    var headerMeta = document.createElement("span");
    headerMeta.className = "right floated meta"
    
    contentDiv.appendChild(headerDiv);
    headerDiv.appendChild(notificationType);
    headerDiv.appendChild(headerMeta);
    headerMeta.appendChild(notificationHeaderMeta);
    
    var descriptionDiv = document.createElement("div");
    descriptionDiv.className = "description";
    
    var row = document.createElement("div");
    descriptionDiv.className = "ui row";
    
    descriptionDiv.appendChild(row);
        row.appendChild(dueDate);
        row.appendChild(month);
        row.appendChild(date);

        var br = document.createElement("br");
        row.appendChild(br);
    
        row.appendChild(dueVenue);
        row.appendChild(venue);
    
    var extraContentDiv = document.createElement("div");
    extraContentDiv.className = "extra content";
     
    var userAvatar = document.createElement("img");
    userAvatar.src = "img/characters/khaleesi.jpg";
    userAvatar.className = "ui mini circular image";

    var courseMeta = document.createElement("div");
    courseMeta.className = "right floated meta";
    
    contentDiv.appendChild(descriptionDiv);
    cardDiv.appendChild(extraContentDiv);
    extraContentDiv.appendChild(userAvatar);
    extraContentDiv.appendChild(userMetaSpace);
    extraContentDiv.appendChild(proffessor);
    extraContentDiv.appendChild(courseMeta);
    courseMeta.appendChild(course);
}