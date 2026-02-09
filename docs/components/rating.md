# Rating

DaisyUI [Rating](https://daisyui.com/components/rating/) 的 Blade 封装。

## 用法

```blade
<x-dui::rating>
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="1 star" />
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="2 star" checked="checked" />
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="3 star" />
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="4 star" />
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="5 star" />
</x-dui::rating>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| half | bool | false | — |
| hidden | bool | false | — |
| size | string | null | xs, sm, md, lg, xl |

> `hidden` 为 true 时会在开头插入一个隐藏的 radio，允许用户清除评分。
> `half` 为 true 时启用半星评分模式。

## 示例

### 基本用法
```blade
<x-dui::rating>
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="1 star" />
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="2 star" checked="checked" />
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="3 star" />
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="4 star" />
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="5 star" />
</x-dui::rating>
```

### 带自定义颜色
```blade
<x-dui::rating>
  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="1 star" />
  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="2 star" checked="checked" />
  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="3 star" />
  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="4 star" />
  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" aria-label="5 star" />
</x-dui::rating>
```

### 尺寸
```blade
<x-dui::rating size="xs">...</x-dui::rating>
<x-dui::rating size="sm">...</x-dui::rating>
<x-dui::rating size="md">...</x-dui::rating>
<x-dui::rating size="lg">...</x-dui::rating>
<x-dui::rating size="xl">...</x-dui::rating>
```

### 带隐藏清除选项
```blade
<x-dui::rating size="lg" :hidden="true">
  <input type="radio" name="rating-3" class="mask mask-star-2" aria-label="1 star" />
  <input type="radio" name="rating-3" class="mask mask-star-2" aria-label="2 star" checked="checked" />
  <input type="radio" name="rating-3" class="mask mask-star-2" aria-label="3 star" />
  <input type="radio" name="rating-3" class="mask mask-star-2" aria-label="4 star" />
  <input type="radio" name="rating-3" class="mask mask-star-2" aria-label="5 star" />
</x-dui::rating>
```

### 半星评分
```blade
<x-dui::rating size="lg" :half="true" :hidden="true">
  <input type="radio" name="rating-4" class="mask mask-star-2 mask-half-1 bg-green-500" aria-label="0.5 star" />
  <input type="radio" name="rating-4" class="mask mask-star-2 mask-half-2 bg-green-500" aria-label="1 star" />
  <input type="radio" name="rating-4" class="mask mask-star-2 mask-half-1 bg-green-500" aria-label="1.5 star" checked="checked" />
  <input type="radio" name="rating-4" class="mask mask-star-2 mask-half-2 bg-green-500" aria-label="2 star" />
  <!-- ... -->
</x-dui::rating>
```

## 渲染结果
```html
<div class="rating">
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="1 star" />
  <input type="radio" name="rating-1" class="mask mask-star" aria-label="2 star" checked="checked" />
  ...
</div>

<!-- 带 hidden 和 size -->
<div class="rating rating-lg">
  <input type="radio" class="rating-hidden" aria-label="clear" />
  <input type="radio" name="rating-3" class="mask mask-star-2" aria-label="1 star" />
  ...
</div>

<!-- 半星 -->
<div class="rating rating-lg rating-half">
  <input type="radio" class="rating-hidden" aria-label="clear" />
  <input type="radio" name="rating-4" class="mask mask-star-2 mask-half-1 bg-green-500" aria-label="0.5 star" />
  ...
</div>
```
