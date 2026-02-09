# Hover Gallery

DaisyUI [Hover Gallery](https://daisyui.com/components/hover-gallery/) 的 Blade 封装。

## 用法

```blade
<x-dui::hover-gallery>
    <img src="/img/photo1.jpg" alt="图片1" />
    <img src="/img/photo2.jpg" alt="图片2" />
    <img src="/img/photo3.jpg" alt="图片3" />
</x-dui::hover-gallery>
```

## Props

无额外 Props。

## 示例

### 基础悬停画廊

```blade
<x-dui::hover-gallery class="max-w-lg">
    <img src="/img/photo1.jpg" alt="图片1" />
    <img src="/img/photo2.jpg" alt="图片2" />
    <img src="/img/photo3.jpg" alt="图片3" />
    <img src="/img/photo4.jpg" alt="图片4" />
    <img src="/img/photo5.jpg" alt="图片5" />
</x-dui::hover-gallery>
```

### 圆角图片画廊

```blade
<x-dui::hover-gallery class="max-w-lg">
    <img src="/img/photo1.jpg" alt="图片1" class="rounded-box" />
    <img src="/img/photo2.jpg" alt="图片2" class="rounded-box" />
    <img src="/img/photo3.jpg" alt="图片3" class="rounded-box" />
</x-dui::hover-gallery>
```

## 渲染结果

```html
<div class="hover-gallery">
    <img src="/img/photo1.jpg" alt="图片1" />
    <img src="/img/photo2.jpg" alt="图片2" />
    <img src="/img/photo3.jpg" alt="图片3" />
</div>
```
