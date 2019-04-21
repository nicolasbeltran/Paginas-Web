import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-landing',
  templateUrl: './landing.component.html',
  styleUrls: ['./landing.component.scss']
})
export class LandingComponent implements OnInit {

  constructor() { }

  ngOnInit() {
    console.log("voy a landing!")
    document.getElementById("navbarSupportedContent").classList.add("navbarWhite");
    document.getElementById("translateLang").classList.add("d-none");
    document.getElementById("footerContainer").classList.add("d-none");
    document.getElementById("navbarBorder").classList.add("d-none");

    document.getElementsByTagName("body")[0].style["background-image"] = "url(assets/images/landing-free-photo.jpg)";

  }

}
