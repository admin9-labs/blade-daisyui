# Tooltip

DaisyUI [Tooltip](https://daisyui.com/components/tooltip/) 的 Blade 封装。

## 用法

```blade
<x-dui::tooltip tip="hello">
  <button class="btn">Hover me</button>
</x-dui::tooltip>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| tip | string | null | 提示文本（设置 `data-tip` 属性） |
| position | string | null | top, bottom, left, right |
| color | string | null | neutral, primary, secondary, accent, info, success, warning, error |
| open | bool | false | 强制显示 tooltip |

## 子组件

### tooltip.content

用于自定义 tooltip 内容（替代纯文本 `data-tip`）。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无额外 props，仅接受 slot 内容 |

## 示例

### 基本用法
```blade
<x-dui::tooltip tip="hello">
  <button class="btn">Hover me</button>
</x-dui::tooltip>
```

### 自定义内容
```blade
<x-dui::tooltip>
  <x-dui::tooltip.content>
    <div class="animate-bounce text-2xl font-black">Wow!</div>
  </x-dui::tooltip.content>
  <button class="btn">Hover me</button>
</x-dui::tooltip>
```

### 强制显示
```blade
<x-dui::tooltip tip="hello" :open="true">
  <button class="btn">Force open</button>
</x-dui::tooltip>
```

### 位置
```blade
<x-dui::tooltip tip="hello" position="top">
  <button class="btn">Top</button>
</x-dui::tooltip>
<x-dui::tooltip tip="hello" position="bottom">
  <button class="btn">Bottom</button>
</x-dui::tooltip>
<x-dui::tooltip tip="hello" position="left">
  <button class="btn">Left</button>
</x-dui::tooltip>
<x-dui::tooltip tip="hello" position="right">
  <button class="btn">Right</button>
</x-dui::tooltip>
```

### 颜色
```blade
<x-dui::tooltip tip="neutral" color="neutral" :open="true">
  <button class="btn btn-neutral">neutral</button>
</x-dui::tooltip>
<x-dui::tooltip tip="primary" color="primary" :open="true">
  <button class="btn btn-primary">primary</button>
</x-dui::tooltip>
<x-dui::tooltip tip="secondary" color="secondary" :open="true">
  <button class="btn btn-secondary">secondary</button>
</x-dui::tooltip>
<x-dui::tooltip tip="accent" color="accent" :open="true">
  <button class="btn btn-accent">accent</button>
</x-dui::tooltip>
```

## 渲染结果

使用 `tip` 属性：
```html
<div class="tooltip tooltip-top tooltip-primary" data-tip="hello">
  <button class="btn">Hover me</button>
</div>
```

使用 `tooltip.content` 子组件：
```html
<div class="tooltip">
  <div class="tooltip-content">
    <div class="animate-bounce text-2xl font-black">Wow!</div>
  </div>
  <button class="btn">Hover me</button>
</div>
```
