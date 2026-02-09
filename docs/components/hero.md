# Hero

DaisyUI [Hero](https://daisyui.com/components/hero/) 的 Blade 封装。

## 用法

```blade
<x-dui::hero class="min-h-screen bg-base-200">
  <x-dui::hero.content class="text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">Hello there</h1>
      <p class="py-6">Description text here.</p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </x-dui::hero.content>
</x-dui::hero>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 子组件

### `<x-dui::hero.content>`

Hero 内容区域。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

### `<x-dui::hero.overlay>`

Hero 背景遮罩层，用于覆盖背景图片。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 居中 Hero

```blade
<x-dui::hero class="min-h-screen bg-base-200">
  <x-dui::hero.content class="text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">Hello there</h1>
      <p class="py-6">Provident cupiditate voluptatem et in.</p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </x-dui::hero.content>
</x-dui::hero>
```

### 带图片的 Hero

```blade
<x-dui::hero class="min-h-screen bg-base-200">
  <x-dui::hero.content class="flex-col lg:flex-row">
    <img src="/images/hero.webp" class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold">Box Office News!</h1>
      <p class="py-6">Description text here.</p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </x-dui::hero.content>
</x-dui::hero>
```

### 带背景图片和遮罩

```blade
<x-dui::hero class="min-h-screen" style="background-image: url(/images/bg.webp);">
  <x-dui::hero.overlay />
  <x-dui::hero.content class="text-center text-neutral-content">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
      <p class="mb-5">Description text here.</p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </x-dui::hero.content>
</x-dui::hero>
```

## 渲染结果

```html
<div class="hero min-h-screen bg-base-200">
  <div class="hero-overlay"></div>
  <div class="hero-content text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">Hello there</h1>
    </div>
  </div>
</div>
```
