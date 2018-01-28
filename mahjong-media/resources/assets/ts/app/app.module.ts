import { NgModule } from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';
import { ClarityModule } from 'clarity-angular';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header.component';
import { ContentComponent } from './content.component';
@NgModule({
    imports: [
        BrowserModule,
        ClarityModule.forRoot()
    ],
    declarations: [
        AppComponent, ContentComponent, HeaderComponent
    ],
    bootstrap: [ AppComponent ]
})
export class AppModule { }
