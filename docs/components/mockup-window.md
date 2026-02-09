# Mockup Window

DaisyUI [Window Mockup](https://daisyui.com/components/mockup-window/) 的 Blade 封装。

## 用法

```blade
<x-dui::mockup-window class="border border-base-300 w-full">
  <div class="grid place-content-center border-t border-base-300 h-80">Hello!</div>
</x-dui::mockup-window>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 带边框

```blade
<x-dui::mockup-window class="border border-base-300 w-full">
  <div class="grid place-content-center border-t border-base-300 h-80">Hello!</div>
</x-dui::mockup-window>
```

### 带背景色

```blade
<x-dui::mockup-window class="bg-base-100 border border-base-300 w-full">
  <div class="grid place-content-center h-80">Hello!</div>
</x-dui::mockup-window>
```

## 渲染结果

```html
<div class="mockup-window border border-base-300 w-full">
  <div class="grid place-content-center border-t border-base-300 h-80">Hello!</div>
</div>
```
