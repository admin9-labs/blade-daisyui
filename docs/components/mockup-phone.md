# Mockup Phone

DaisyUI [Phone Mockup](https://daisyui.com/components/mockup-phone/) 的 Blade 封装。

## 用法

```blade
<x-dui::mockup-phone>
  <x-dui::mockup-phone.camera />
  <x-dui::mockup-phone.display class="text-white bg-neutral-900 grid place-content-center">
    It's Glowtime.
  </x-dui::mockup-phone.display>
</x-dui::mockup-phone>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 子组件

### `<x-dui::mockup-phone.camera>`

手机摄像头部分（刘海区域）。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

### `<x-dui::mockup-phone.display>`

手机屏幕显示区域。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 基本手机模型

```blade
<x-dui::mockup-phone>
  <x-dui::mockup-phone.camera />
  <x-dui::mockup-phone.display class="text-white bg-neutral-900 grid place-content-center">
    It's Glowtime.
  </x-dui::mockup-phone.display>
</x-dui::mockup-phone>
```

### 自定义边框颜色和壁纸

```blade
<x-dui::mockup-phone class="border-[#ff8938]">
  <x-dui::mockup-phone.camera />
  <x-dui::mockup-phone.display>
    <img alt="wallpaper" src="/images/wallpaper.webp" />
  </x-dui::mockup-phone.display>
</x-dui::mockup-phone>
```

## 渲染结果

```html
<div class="mockup-phone">
  <div class="mockup-phone-camera"></div>
  <div class="mockup-phone-display text-white bg-neutral-900 grid place-content-center">
    It's Glowtime.
  </div>
</div>
```
