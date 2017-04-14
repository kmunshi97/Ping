// Create a new list item when clicking on the "Send" button
function sendChat() {
    var li = document.createElement("li");
        li.className = "receiver";
    
    var inputMessage = document.getElementById("message-textarea").value;
    
    var chatOutputDiv = document.createElement("div");
        chatOutputDiv.className = "receiver";
        
        li.appendChild(chatOutputDiv);
 
    if (inputMessage === '') {

    } else {
        document.getElementById("chatbox").appendChild(li);
    }
  
    document.getElementById("message-textarea").value = "";

    var span = document.createElement("SPAN");
    var txt = document.createTextNode(inputMessage);
    
    span.className = "ui right pointing big teal label";
    span.appendChild(txt);
    chatOutputDiv.appendChild(span);    
}

// Create a new list item to fetch chat.
function fetchChat() {
    var li = document.createElement("li");
        li.className = "sender";
    
    var msg = [
            
            'Why did the web developer leave the restaurant? Because of the table layout.',
    
            'How do you comfort a JavaScript bug? You console it.',

            'An SQL query enters a bar, approaches two tables and asks: "May I join you?"',
            
            'What is the most used language in programming? Profanity.',
            
            'What is the object-oriented way to become wealthy? Inheritance.',
            
            'An SEO expert walks into a bar, bars, pub, tavern, public house, Irish pub, drinks, beer, alcohol',
          
            'Why do Java Programmers have to wear glasses? Because they donot C# (see sharp)',
            
            'Why did the programmer quit his job? Because they did not gave him arrays (a raise)',
        ];
    
    var i = Math.floor(Math.random() * 8);
    
    var inputMessage = msg[i];
    
    var chatOutputDiv = document.createElement("div");
        chatOutputDiv.className = "sender";
        
        li.appendChild(chatOutputDiv);
        document.getElementById("chatbox").appendChild(li);
  
    var span = document.createElement("SPAN");
    var txt = document.createTextNode(inputMessage);
    
    span.className = "ui left pointing big blue label";
    span.appendChild(txt);
    chatOutputDiv.appendChild(span);    

}