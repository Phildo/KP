﻿package app{		public class Cups{		private var filled:Array;		private var lFilled:Boolean;		private var rFilled:Boolean;		//LAYOUT OF CUP ID's		// 16                    06		//    13              03		// 17    11        01    07		//    14    10  00    04		// 18    12        02    08		//    15              05		// 19                    09		public function Cups() {			filled = new Array();			for (var i:int = 0; i < 20; i++) {				filled[i]=true;			}		}		//ex: Integer 03 = Team 0, cup 3		function drain(cup:int):void {			if (cup==00) {				Team0.cup0.gotoAndPlay(2);				filled[0]=false;			} else if (cup == 01) {				Team0.cup1.gotoAndPlay(2);				filled[1]=false;			} else if (cup == 02) {				Team0.cup2.gotoAndPlay(2);				filled[2]=false;			} else if (cup == 03) {				Team0.cup3.gotoAndPlay(2);				filled[3]=false;			} else if (cup == 04) {				Team0.cup4.gotoAndPlay(2);				filled[4]=false;			} else if (cup == 05) {				Team0.cup5.gotoAndPlay(2);				filled[5]=false;			} else if (cup == 06) {				Team0.cup6.gotoAndPlay(2);				filled[6]=false;			} else if (cup == 07) {				Team0.cup7.gotoAndPlay(2);				filled[7]=false;			} else if (cup == 08) {				Team0.cup8.gotoAndPlay(2);				filled[8]=false;			} else if (cup == 09) {				Team0.cup9.gotoAndPlay(2);				filled[9]=false;			} else if (cup == 10) {				Team1.cup0.gotoAndPlay(2);				filled[10]=false;			} else if (cup == 11) {				Team1.cup1.gotoAndPlay(2);				filled[11]=false;			} else if (cup == 12) {				Team1.cup2.gotoAndPlay(2);				filled[12]=false;			} else if (cup == 13) {				Team1.cup3.gotoAndPlay(2);				filled[13]=false;			} else if (cup == 14) {				Team1.cup4.gotoAndPlay(2);				filled[14]=false;			} else if (cup == 15) {				Team1.cup5.gotoAndPlay(2);				filled[15]=false;			} else if (cup == 16) {				Team1.cup6.gotoAndPlay(2);				filled[16]=false;			} else if (cup == 17) {				Team1.cup7.gotoAndPlay(2);				filled[17]=false;			} else if (cup == 18) {				Team1.cup8.gotoAndPlay(2);				filled[18]=false;			} else if (cup == 19) {				Team1.cup9.gotoAndPlay(2);				filled[19]=false;			}		}		function fill(cup:int):void {			if (cup==00) {				Team0.cup0.gotoAndStop(1);				filled[0]=true;			} else if (cup == 01) {				Team0.cup1.gotoAndStop(1);				filled[1]=true;			} else if (cup == 02) {				Team0.cup2.gotoAndStop(1);				filled[2]=true;			} else if (cup == 03) {				Team0.cup3.gotoAndStop(1);				filled[3]=true;			} else if (cup == 04) {				Team0.cup4.gotoAndStop(1);				filled[4]=true;			} else if (cup == 05) {				Team0.cup5.gotoAndStop(1);				filled[5]=true;			} else if (cup == 06) {				Team0.cup6.gotoAndStop(1);				filled[6]=true;			} else if (cup == 07) {				Team0.cup7.gotoAndStop(1);				filled[7]=true;			} else if (cup == 08) {				Team0.cup8.gotoAndStop(1);				filled[8]=true;			} else if (cup == 09) {				Team0.cup9.gotoAndStop(1);				filled[9]=true;			} else if (cup == 10) {				Team1.cup0.gotoAndStop(1);				filled[10]=true;			} else if (cup == 11) {				Team1.cup1.gotoAndStop(1);				filled[11]=true;			} else if (cup == 12) {				Team1.cup2.gotoAndStop(1);				filled[12]=true;			} else if (cup == 13) {				Team1.cup3.gotoAndStop(1);				filled[13]=true;			} else if (cup == 14) {				Team1.cup4.gotoAndStop(1);				filled[14]=true;			} else if (cup == 15) {				Team1.cup5.gotoAndStop(1);				filled[15]=true;			} else if (cup == 16) {				Team1.cup6.gotoAndStop(1);				filled[16]=true;			} else if (cup == 17) {				Team1.cup7.gotoAndStop(1);				filled[17]=true;			} else if (cup == 18) {				Team1.cup8.gotoAndStop(1);				filled[18]=true;			} else if (cup == 19) {				Team1.cup9.gotoAndStop(1);				filled[19]=true;			}		}	}}