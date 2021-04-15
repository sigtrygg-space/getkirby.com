<style>
  .ingrid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: repeat(4, min-content);
    grid-gap: clamp(var(--spacing-2px), 1.5vw, var(--spacing-6));
  }
  .ingrid figure {
    background: var(--color-light);
  }
</style>

<div class="ingrid">
  <div style="grid-column: span 6; align-self: flex-end">
    <?= img('author.png', [
      'lightbox' => 'interface',
      'src' => [
        'width' => 500,
      ],
      'srcset' => [
        '1x' => [
          'width' => 500
        ],
        '2x' => [
          'width' => 1000
        ],
      ]
    ]) ?>
  </div>
  <div style="grid-column: span 6; align-self: flex-end">
    <?= img('list.png', [
      'lightbox' => 'interface',
      'src' => [
        'width' => 500,
      ],
      'srcset' => [
        '1x' => [
          'width' => 500
        ],
        '2x' => [
          'width' => 1000
        ],
      ]
    ]) ?>
  </div>
  <div style="grid-column: span 12">
    <?= img('images.png', [
      'lightbox' => 'interface',
      'src' => [
        'width' => 1000,
      ],
      'srcset' => [
        '1x' => [
          'width' => 1000
        ],
        '2x' => [
          'width' => 2000
        ],
      ]
    ]) ?>
  </div>
  <div style="grid-column: span 9">
    <?= img('structure.png', [
      'lightbox' => 'interface',
      'src' => [
        'width' => 750,
      ],
      'srcset' => [
        '1x' => [
          'width' => 750
        ],
        '2x' => [
          'width' => 1500
        ],
      ]
    ]) ?>
  </div>
  <div style="grid-column: span 6">
    <?= img('albums.png', [
      'lightbox' => 'interface',
      'src' => [
        'width' => 500,
      ],
      'srcset' => [
        '1x' => [
          'width' => 500
        ],
        '2x' => [
          'width' => 1000
        ],
      ]
    ]) ?>
  </div>
</div>
