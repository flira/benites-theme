import { Component, Host, h } from '@stencil/core';

@Component({
  tag: 'benites-store',
  styleUrl: 'benites-store.css',
  shadow: true,
})
export class BenitesStore {

  render() {
    return (
      <Host>
        <slot></slot>
      </Host>
    );
  }

}
