﻿package app{	public class Profile {		private var person:String;		private var pWord:String;		private var wins:int;		private var losses:int;		private var credits:int;		private var notGuest:Boolean;				public function Profile(g:Boolean, n:Boolean, p:String, pword:String, w:int, l:int, c:int) {			if(n){				this.person = "";				this.pWord = "";				this.wins = 0;				this.losses = 0;					this.notGuest = g;				this.credits = 1500;			}			else {				this.person = p;				this.pWord = pword;				this.wins = w;				this.losses = l;				this.credits = c;				this.notGuest = true;			}		}					public function bet(wager:int) {			this.credits-=wager;		}				public function getCreds():int {			return this.credits;		}				public function getPerson():String {			return this.person;		}		public function setPerson(p:String){			this.person = p;		}		public function getWins():int {			return this.wins;		}		public function setWins(num:int) {			this.wins = num;		}		public function addWin() {			this.wins++;		}		public function getLosses():int {			return this.losses;		}		public function setLosses(num:int) {			this.losses = num;		}		public function addLoss() {			this.losses++;		}		public function isNotGuest():Boolean {			return this.notGuest;		}		public function getPass():String {			return this.pWord;		}		public function setPass(pass:String) {			this.pWord = pass;		}	}}