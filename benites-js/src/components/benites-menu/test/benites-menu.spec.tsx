import { newSpecPage } from '@stencil/core/testing';
import { BenitesMenu } from '../benites-menu';

describe('benites-menu', () => {
  it('renders', async () => {
    const page = await newSpecPage({
      components: [BenitesMenu],
      html: `<benites-menu></benites-menu>`,
    });
    expect(page.root).toEqualHtml(`
      <benites-menu>
        <mock:shadow-root>
          <slot></slot>
        </mock:shadow-root>
      </benites-menu>
    `);
  });
});
