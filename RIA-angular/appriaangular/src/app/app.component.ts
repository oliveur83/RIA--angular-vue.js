import { Component,OnInit } from '@angular/core';
import { NavigationExtras, Router } from '@angular/router';
//routeur
@Component({
  selector: 'app-root',
  // ma page principal 
  templateUrl: './app.component.html',
  styles: []
})
// tout mes variable associer a ma page 
export class AppComponent{
  constructor(private router: Router) {} // utilisez activatedRoute plutôt que route

  deconnexion() {
    this.router.navigate(['/principal']);
        
  }
}
