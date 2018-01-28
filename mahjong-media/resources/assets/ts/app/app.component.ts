import { Component } from '@angular/core';
import { ContentComponent } from './content.component';
import { HeaderComponent } from './header.component';

@Component({
    selector: 'my-app',
    template: `${require('./app.component.html')}`,
    styles: [
        `${require('./app.component.scss')}`,
    ]
})
export class AppComponent {

}
