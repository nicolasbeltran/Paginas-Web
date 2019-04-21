import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {

  title = 'app-frontend-habana412';

  onActivate(event) {
    document.getElementById("navbarSupportedContent").classList.remove("navbarWhite");
    document.getElementById("footerContainer").classList.remove("d-none");
    document.getElementById("translateLang").classList.remove("d-none");
    document.getElementById("navbarBorder").classList.remove("d-none");
  }

}