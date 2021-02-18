import { newSpecPage } from '@stencil/core/testing';
import { BenitesStore } from '../benites-store';

describe('benites-store', () => {
  it('renders', async () => {
    const page = await newSpecPage({
      components: [BenitesStore],
      html: `<benites-store></benites-store>`,
    });
    expect(page.root).toEqualHtml(`
      <benites-store>
        <mock:shadow-root>
          <slot></slot>
        </mock:shadow-root>
      </benites-store>
    `);
  });
});
