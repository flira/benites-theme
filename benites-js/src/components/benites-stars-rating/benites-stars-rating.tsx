import { Component, Element, Host, h } from '@stencil/core';
import { IconLookup, icon, library } from '@fortawesome/fontawesome-svg-core';
import { faStar, faStarHalfAlt } from '@fortawesome/free-solid-svg-icons';
import { faStar as faStarEmpty } from '@fortawesome/free-regular-svg-icons';

library.add(faStar);
library.add(faStarEmpty);
library.add(faStarHalfAlt);

@Component({
  tag: 'benites-stars-rating',
  styleUrl: 'benites-stars-rating.css',
})
export class BenitesStarsRating {
  @Element() host: HTMLElement;

  componentDidLoad() {
    const ratingEl: HTMLElement = this.host.querySelector('.star-rating');
    if (!ratingEl || this.host.querySelector('svg')) {
      return;
    }
    const ratingTxt: HTMLElement = ratingEl.querySelector('.rating');
    const rating: number = parseFloat(ratingTxt.innerText);
    let stars: string = '';
    for (let i = 0; i < Math.floor(rating); i++) {
      stars += this._createFullStar();
    }
    if (rating !== Math.floor(rating)) {
      stars += this._createHalfStar();
    }
    for (let i = 0; i < (5 - Math.ceil(rating)); i++) {
      stars += this._createEmptyStar();
    }
    ratingEl.innerHTML = stars;
  }

  static createIconText(params: IconLookup): string {
    return icon(params).html[0];
  }

  private _createFullStar(): string {
    return BenitesStarsRating
      .createIconText({ prefix: 'fas', iconName: 'star' });
  }

  private _createEmptyStar(): string {
    return BenitesStarsRating
      .createIconText({ prefix: 'far', iconName: 'star' });
  }

  private _createHalfStar(): string {
    return BenitesStarsRating
      .createIconText({ prefix: 'fas', iconName: 'star-half-alt' });
  }

  render() {
    return (
      <Host>
        <slot />
      </Host>
    );
  }
}
