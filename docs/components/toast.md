# Toast

DaisyUI [Toast](https://daisyui.com/components/toast/) 的 Blade 封装。

## 用法

```blade
<x-dui::toast>
  <x-dui::alert color="info">New message arrived.</x-dui::alert>
</x-dui::toast>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| horizontal | string | null | start, center, end |
| vertical | string | null | top, middle, bottom |

> **注意**: 默认位置为右下角（`toast-end toast-bottom`）。

## 示例

### 基本用法（右下角）
```blade
<x-dui::toast>
  <x-dui::alert color="info">New message arrived.</x-dui::alert>
</x-dui::toast>
```

### 左上角
```blade
<x-dui::toast horizontal="start" vertical="top">
  <x-dui::alert color="info">New mail arrived.</x-dui::alert>
  <x-dui::alert color="success">Message sent successfully.</x-dui::alert>
</x-dui::toast>
```

### 顶部居中
```blade
<x-dui::toast horizontal="center" vertical="top">
  <x-dui::alert color="info">New mail arrived.</x-dui::alert>
</x-dui::toast>
```

### 垂直居中
```blade
<x-dui::toast horizontal="end" vertical="middle">
  <x-dui::alert color="success">Message sent successfully.</x-dui::alert>
</x-dui::toast>
```

### 底部居中
```blade
<x-dui::toast horizontal="center">
  <x-dui::alert color="info">New mail arrived.</x-dui::alert>
</x-dui::toast>
```

## 渲染结果
```html
<div class="toast toast-top toast-start">
  <div role="alert" class="alert alert-info">New mail arrived.</div>
</div>
```
