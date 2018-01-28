import { Component } from '@angular/core';

@Component({
    selector: 'content-component',
    template: `${require('./content.component.html')}`,
    styles: [
        `${require('./content.component.scss')}`,
    ]
})
export class ContentComponent {
    count = 0;

    reserve() {
        this.count++;
    }

    cancel() {
        this.count--;
    }
}
