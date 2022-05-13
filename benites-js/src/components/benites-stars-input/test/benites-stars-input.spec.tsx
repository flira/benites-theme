import { newSpecPage } from '@stencil/core/testing';
import { BenitesStarsInput } from '../benites-stars-input';

describe('benites-stars-input', () => {
  it('renders', async () => {
    const page = await newSpecPage({
      components: [BenitesStarsInput],
      html: `<benites-stars-input></benites-stars-input>`,
    });
    expect(page.root).toEqualHtml(`
      <benites-stars-input>
        <mock:shadow-root>
          <slot></slot>
        </mock:shadow-root>
      </benites-stars-input>
    `);
  });
});
