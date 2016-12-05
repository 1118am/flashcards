
var cards;

function CallPHP() {
    $.ajax({
        type: "POST",
        url: "functions.php",
        success: function (response) {
            //$('#thenode').html(response);
            //console.log(response);
            //$("#content").html(response);
            cards = JSON.parse(response);
            ShowCards();
        }
     });
    
   
}


function ShowCards () {
    for (i = 0; i < cards.length; i++) {
        console.log(cards[i].front);
        CardConstructor(cards[i].front, cards[i].back);
    }
}


function CardConstructor (front, back) {
    var card_wrapper = document.getElementById("cards");
    
    var card_container = document.createElement("div");
    $(card_container).addClass('card-container');
    
    var card_flip = document.createElement("div");
    $(card_flip).addClass('card-flip');
    
    var card_front = document.createElement("div");
    $(card_front).addClass('card front');
    
    var card_back = document.createElement("div");
    $(card_back).addClass('card back');
    
    var card_front_text = document.createElement("h1");
    card_front_text.innerHTML = front;
    
    var card_back_text = document.createElement("h1");
    card_back_text.innerHTML = back;
    
    
    card_wrapper.appendChild(card_container);
    card_container.appendChild(card_flip);
    
    card_flip.appendChild(card_front);
    card_front.appendChild(card_front_text);
    
    card_flip.appendChild(card_back);
    card_back.appendChild(card_back_text);
    
}

CallPHP();

$(function () {
           
    $('.card-flip').click(function() {
        $(this).toggleClass('flip');
    });

}); 

$(document).ajaxStop(function () {
           
    $('.card-flip').click(function() {
        $(this).toggleClass('flip');
    });

}); 



/*<div class="card-container" ontouchstart="this.classlist.toggle('hover');">
    <div class="card-flip">
        <div class="card front">
            <h1>Card Front</h1>
        </div>
        <div class="card back">
            <h1>Card Back</h1>
        </div>
    </div>
</div>*/