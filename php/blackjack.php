<?php

// create an array for suits
$suits = ['C', 'H', 'S', 'D'];

// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it

function buildDeck($suits, $cards) {
  shuffle($suits);
  shuffle($cards);

foreach ($suits as $key => $suit):
       foreach ($cards as $c =>$card):
             $variables[$suit][] = $card . '_' . $suit; 
       endforeach;
endforeach;

return $variables;

}

