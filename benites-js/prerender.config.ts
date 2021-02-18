import { PrerenderConfig } from '@stencil/core';
export const config: PrerenderConfig = {
  hydrateOptions(url) {
    console.log(url);
    return {
      approximateLineWidth: 80,
      language: 'pt',
      prettyHtml: true
    };
  }
};