﻿package app {	public class Profile {		//Variables		private var person:String;		private var pWord:String;		private var wins:int;		private var losses:int;		private var credits:int;		private var rank:int;		private var cupshit:int;		private var cupsdown:int;		private var guest:Boolean;		private var fON:Boolean;				//Constructor		public function Profile(p:String, pW:String, w:int, l:int, c:int, r:int, ch:int, cd:int, g:Boolean){			person = p;			pWord = pW;			wins = w;			losses = l;			credits = c;			rank = r;			guest = g;			cupshit = ch;			cupsdown = cd;			fON = true;		}					//NECESSARY FOR SERVER		public function setPerson(n:String) {			this.person = n;		}						//Getters		public function getPerson():String {			return person;		}		public function getPass():String {			return pWord;		}		public function getWins():int {			return wins;		}		public function getLosses():int {			return losses;		}		public function getCredits():int {			return credits;		}		public function getRank():int {			return rank;		}		public function getCH():int {			return cupshit;		}		public function getCD():int {			return cupsdown;		}		public function isGuest():Boolean {			return guest;		}				//Mods		public function firstOfNight(){			if(fON){				credits+=500;				fON = false;			}		}		public function win(creds:int, ch:int, cd:int) {			wins++;			cupshit += ch;			cupsdown += cd;			credits += 2*creds;			//updateRank();		}		public function lose(ch:int, cd:int) {			cupshit += ch;			cupsdown += cd;			losses++;			//updateRank();		}		public function bet(creds:int){			credits -= creds;		}		public function updateRank():int{			if(losses == 0){				rank = (wins*(wins+2)+2)			}			else {				rank = (wins/losses)*wins;			}			return rank;		}			}}