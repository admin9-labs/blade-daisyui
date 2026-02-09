# Indicator

DaisyUI [Indicator](https://daisyui.com/components/indicator/) 的 Blade 封装。

## 用法

```blade
<x-dui::indicator>
  <x-dui::indicator.item class="badge badge-primary">New</x-dui::indicator.item>
  <div class="grid w-32 h-32 bg-base-300 place-items-center">content</div>
</x-dui::indicator>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 子组件

### `<x-dui::indicator.item>`

放置在兄弟元素角落的指示器元素。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| horizontal | string | null | start, center, end |
| vertical | string | null | top, middle, bottom |

## 示例

### Badge 指示器

```blade
<x-dui::indicator>
  <x-dui::indicator.item class="badge badge-primary">New</x-dui::indicator.item>
  <div class="grid w-32 h-32 bg-base-300 place-items-center">content</div>
</x-dui::indicator>
```

### 按钮上的指示器

```blade
<x-dui::indicator>
  <x-dui::indicator.item class="badge badge-secondary">12</x-dui::indicator.item>
  <button class="btn">inbox</button>
</x-dui::indicator>
```

### 底部指示器

```blade
<x-dui::indicator>
  <x-dui::indicator.item vertical="bottom" class="badge badge-secondary">
    Bottom
  </x-dui::indicator.item>
  <div class="grid w-32 h-32 bg-base-300 place-items-center">content</div>
</x-dui::indicator>
```

### 居中指示器

```blade
<x-dui::indicator>
  <x-dui::indicator.item horizontal="center" vertical="middle" class="badge">
    Center
  </x-dui::indicator.item>
  <div class="grid w-32 h-32 bg-base-300 place-items-center">content</div>
</x-dui::indicator>
```

### 多个指示器

```blade
<x-dui::indicator>
  <x-dui::indicator.item horizontal="start" vertical="top" class="badge">1</x-dui::indicator.item>
  <x-dui::indicator.item horizontal="end" vertical="bottom" class="badge">2</x-dui::indicator.item>
  <div class="grid w-60 h-32 bg-base-300 place-items-center">Box</div>
</x-dui::indicator>
```

## 渲染结果

```html
<div class="indicator">
  <span class="indicator-item indicator-center indicator-middle badge">Center</span>
  <div class="grid w-32 h-32 bg-base-300 place-items-center">content</div>
</div>
```
