# Carousel

DaisyUI [Carousel](https://daisyui.com/components/carousel/) 的 Blade 封装。

## 用法

```blade
<x-dui::carousel>
    <x-dui::carousel.item>
        <img src="/img/slide1.jpg" alt="幻灯片1" />
    </x-dui::carousel.item>
    <x-dui::carousel.item>
        <img src="/img/slide2.jpg" alt="幻灯片2" />
    </x-dui::carousel.item>
</x-dui::carousel>
```

## Props

### carousel (index)

| Prop | Type | Default | Values |
|------|------|---------|--------|
| snap | string\|null | null | start (默认行为), center, end |
| vertical | bool | false | — |

### carousel.item

无额外 Props。

## 子组件

- `<x-dui::carousel.item>` — 单个轮播项

## 示例

### 居中对齐

```blade
<x-dui::carousel snap="center" class="rounded-box">
    <x-dui::carousel.item>
        <img src="/img/slide1.jpg" class="rounded-box" alt="幻灯片1" />
    </x-dui::carousel.item>
    <x-dui::carousel.item>
        <img src="/img/slide2.jpg" class="rounded-box" alt="幻灯片2" />
    </x-dui::carousel.item>
</x-dui::carousel>
```

### 末尾对齐

```blade
<x-dui::carousel snap="end" class="rounded-box">
    <x-dui::carousel.item>
        <img src="/img/slide1.jpg" alt="幻灯片1" />
    </x-dui::carousel.item>
</x-dui::carousel>
```

### 垂直轮播

```blade
<x-dui::carousel vertical class="h-96 rounded-box">
    <x-dui::carousel.item>
        <img src="/img/slide1.jpg" alt="幻灯片1" />
    </x-dui::carousel.item>
    <x-dui::carousel.item>
        <img src="/img/slide2.jpg" alt="幻灯片2" />
    </x-dui::carousel.item>
</x-dui::carousel>
```

## 渲染结果

```html
<div class="carousel carousel-center rounded-box">
    <div class="carousel-item">
        <img src="/img/slide1.jpg" alt="幻灯片1" />
    </div>
    <div class="carousel-item">
        <img src="/img/slide2.jpg" alt="幻灯片2" />
    </div>
</div>
```
