import { Component, Element, Host, Prop, h } from '@stencil/core';
import { IconLookup, library, icon } from '@fortawesome/fontawesome-svg-core';
import { faShoppingCart, faStore } from '@fortawesome/free-solid-svg-icons';

library.add(faShoppingCart);
library.add(faStore);

@Component({
  tag: 'benites-menu'
})
export class BenitesMenu {
  @Element() host: HTMLBenitesMenuElement;
  @Prop() cartContentsCount: number;

  connectedCallback() {
    this._replaceIcons({ selector: 'cart', iconName: 'shopping-cart' });
    this._replaceIcons({ selector: 'store', iconName: 'store' });
    this._setCartCount();
  }

  private _replaceIcons(param: { selector: string, iconName: string }) {
    const item: HTMLLIElement =
      this.host.querySelector(`.menu-item-${param.selector}`);
    if (item && !item.querySelector('svg')) {
      const anchor: HTMLAnchorElement = item.querySelector('a');
      const title = anchor.innerText;
      item.querySelector('a').innerHTML =
        icon({ iconName: param.iconName } as IconLookup).html[0];
      anchor.title = title;
    }
  }

  private _setCartCount() {
    const cartItem = this.host.querySelector('.menu-item-cart');
    if (!+this.cartContentsCount || !cartItem) {
      return;
    }
    cartItem.querySelector('a').dataset.contentsCount =
      '' + this.cartContentsCount;
  }

  render() {
    return (
      <Host>
        <slot />
      </Host>
    );
  }

}
