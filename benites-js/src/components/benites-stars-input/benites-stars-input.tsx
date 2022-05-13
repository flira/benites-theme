import { Component, Element, Host, State, Watch, h } from '@stencil/core';
import { icon, library } from '@fortawesome/fontawesome-svg-core';
import { faStar } from '@fortawesome/free-solid-svg-icons';
import { faStar as faStarEmpty } from '@fortawesome/free-regular-svg-icons';

library.add(faStar);
library.add(faStarEmpty);

@Component({
  tag: 'benites-stars-input',
  styleUrl: 'benites-stars-input.css',
})
export class BenitesStarsInput {
  @Element() host: HTMLElement;
  @State() rate: number;
  private _anchorsList: NodeListOf<HTMLAnchorElement>;
  private _selectInput: HTMLSelectElement;
  private _starsInput: HTMLElement;

  @Watch('rate')
  updateInput() {
    this._selectInput.value = `${this.rate}`;
  }

  constructor() {
    this._selectInput = this.host.querySelector('select');
    this._starsInput = this.host.querySelector('.stars');
    this._anchorsList = this._starsInput.querySelectorAll('a');
    this.rate = this._selectInput ? +this._selectInput.value : 0;
  }

  private _anchorClick(e: MouseEvent) {
    e.preventDefault();
    this.rate =
      +((e.currentTarget as HTMLElement).className.replace(/\D/g, ''));
    this._redrawInput();
  }

  private _redrawInput() {
    const fullStar: string = icon({ prefix: 'fas', iconName: 'star' }).html[0];
    const emptyStar: string = icon({ prefix: 'far', iconName: 'star' }).html[0];
    for (let i = 0; i < this._anchorsList.length; i++) {
      const a: HTMLAnchorElement = this._anchorsList[i];
      if (i <= (this.rate - 1)) {
        a.innerHTML = fullStar;
        continue;
      }
      a.innerHTML = emptyStar;
    }
  }

  componentDidLoad() {
    if (!this._starsInput || this.host.querySelector('svg')) {
      return;
    }
    const setupAnchor: (anchor: HTMLAnchorElement) => void = anchor => {
      anchor.addEventListener('click', this._anchorClick.bind(this));
    }
    this._anchorsList.forEach(setupAnchor);
    this._redrawInput();
  }

  render() {
    return (
      <Host>
        <slot />
      </Host>
    );
  }
}