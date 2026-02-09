# Mockup Browser

DaisyUI [Browser Mockup](https://daisyui.com/components/mockup-browser/) 的 Blade 封装。

## 用法

```blade
<x-dui::mockup-browser class="border border-base-300 w-full">
  <x-dui::mockup-browser.toolbar>
    <div class="input">https://daisyui.com</div>
  </x-dui::mockup-browser.toolbar>
  <div class="grid place-content-center border-t border-base-300 h-80">Hello!</div>
</x-dui::mockup-browser>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 子组件

### `<x-dui::mockup-browser.toolbar>`

浏览器工具栏，可包含地址栏等内容。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 带边框

```blade
<x-dui::mockup-browser class="border border-base-300 w-full">
  <x-dui::mockup-browser.toolbar>
    <div class="input">https://daisyui.com</div>
  </x-dui::mockup-browser.toolbar>
  <div class="grid place-content-center border-t border-base-300 h-80">Hello!</div>
</x-dui::mockup-browser>
```

### 带背景色

```blade
<x-dui::mockup-browser class="bg-base-100 border border-base-300 w-full">
  <x-dui::mockup-browser.toolbar>
    <div class="input">https://daisyui.com</div>
  </x-dui::mockup-browser.toolbar>
  <div class="grid place-content-center h-80">Hello!</div>
</x-dui::mockup-browser>
```

## 渲染结果

```html
<div class="mockup-browser border border-base-300 w-full">
  <div class="mockup-browser-toolbar">
    <div class="input">https://daisyui.com</div>
  </div>
  <div class="grid place-content-center border-t border-base-300 h-80">Hello!</div>
</div>
```
