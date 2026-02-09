# Mask

DaisyUI [Mask](https://daisyui.com/components/mask/) 的 Blade 封装。

## 用法

```blade
<x-dui::mask shape="squircle">
  <img src="/images/photo.webp" alt="Masked image" />
</x-dui::mask>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| shape | string | null | squircle, heart, hexagon, hexagon-2, decagon, pentagon, diamond, square, circle, star, star-2, triangle, triangle-2, triangle-3, triangle-4 |
| half | string | null | 1, 2 |

## 示例

### Squircle 形状

```blade
<x-dui::mask shape="squircle">
  <img src="/images/photo.webp" class="w-40 h-40" alt="Squircle" />
</x-dui::mask>
```

### 心形

```blade
<x-dui::mask shape="heart">
  <img src="/images/photo.webp" class="w-40 h-40" alt="Heart" />
</x-dui::mask>
```

### 六边形

```blade
<x-dui::mask shape="hexagon">
  <img src="/images/photo.webp" class="w-40 h-40" alt="Hexagon" />
</x-dui::mask>
```

### 圆形

```blade
<x-dui::mask shape="circle">
  <img src="/images/photo.webp" class="w-40 h-40" alt="Circle" />
</x-dui::mask>
```

### 星形

```blade
<x-dui::mask shape="star">
  <img src="/images/photo.webp" class="w-40 h-40" alt="Star" />
</x-dui::mask>
```

### 半遮罩

```blade
<x-dui::mask shape="heart" half="1">
  <img src="/images/photo.webp" class="w-40 h-40" alt="Half heart" />
</x-dui::mask>
```

### 所有形状

```blade
<x-dui::mask shape="squircle">...</x-dui::mask>
<x-dui::mask shape="heart">...</x-dui::mask>
<x-dui::mask shape="hexagon">...</x-dui::mask>
<x-dui::mask shape="hexagon-2">...</x-dui::mask>
<x-dui::mask shape="decagon">...</x-dui::mask>
<x-dui::mask shape="pentagon">...</x-dui::mask>
<x-dui::mask shape="diamond">...</x-dui::mask>
<x-dui::mask shape="square">...</x-dui::mask>
<x-dui::mask shape="circle">...</x-dui::mask>
<x-dui::mask shape="star">...</x-dui::mask>
<x-dui::mask shape="star-2">...</x-dui::mask>
<x-dui::mask shape="triangle">...</x-dui::mask>
<x-dui::mask shape="triangle-2">...</x-dui::mask>
<x-dui::mask shape="triangle-3">...</x-dui::mask>
<x-dui::mask shape="triangle-4">...</x-dui::mask>
```

## 渲染结果

```html
<div class="mask mask-squircle mask-half-1">
  <img src="/images/photo.webp" class="w-40 h-40" alt="Masked image" />
</div>
```
