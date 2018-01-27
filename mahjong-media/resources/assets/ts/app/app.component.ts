import { Component } from '@angular/core';

@Component({
    selector: 'my-app',
    template: require('./app.component.html'),
    styles: [
        `${require('./app.component.scss')}`,
    ]
})
export class AppComponent {
    count: number=0;

    public reserve() {
        this.count++;
    }
    public cancel() {
        this.count--;
    }
}
