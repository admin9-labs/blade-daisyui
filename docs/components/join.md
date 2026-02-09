# Join

DaisyUI [Join](https://daisyui.com/components/join/) 的 Blade 封装。

## 用法

### 推荐用法

```blade
<x-dui::join>
  <x-dui::join.item><button class="btn">Button</button></x-dui::join.item>
  <x-dui::join.item><button class="btn">Button</button></x-dui::join.item>
  <x-dui::join.item><button class="btn">Button</button></x-dui::join.item>
</x-dui::join>
```

```blade
<x-dui::join>
  <button class="btn join-item">Button</button>
  <button class="btn join-item">Button</button>
  <button class="btn join-item">Button</button>
</x-dui::join>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| direction | string | null | vertical, horizontal |

## 子组件

### `<x-dui::join.item>`

Join 组内的子项容器。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

> **注意**: `join-item` 是一个工具类，通常直接添加到子元素的 class 上（如 `<button class="btn join-item">`），而不需要使用 `<x-dui::join.item>` 包裹。`<x-dui::join.item>` 适用于需要额外 div 包裹的场景。

## 示例

### 水平分组按钮（旧用法）

```blade
<x-dui::join>
  <button class="btn join-item">Button</button>
  <button class="btn join-item">Button</button>
  <button class="btn join-item">Button</button>
</x-dui::join>
```

### 垂直分组

```blade
<x-dui::join direction="vertical">
  <button class="btn join-item">Button</button>
  <button class="btn join-item">Button</button>
  <button class="btn join-item">Button</button>
</x-dui::join>
```

### 响应式分组

```blade
<x-dui::join direction="vertical" class="lg:join-horizontal">
  <button class="btn join-item">Button</button>
  <button class="btn join-item">Button</button>
  <button class="btn join-item">Button</button>
</x-dui::join>
```

### 搜索栏组合

```blade
<x-dui::join>
  <input class="input join-item" placeholder="Email" />
  <button class="btn join-item rounded-r-full">Subscribe</button>
</x-dui::join>
```

### Radio 按钮组

```blade
<x-dui::join>
  <input class="join-item btn" type="radio" name="options" aria-label="Radio 1" />
  <input class="join-item btn" type="radio" name="options" aria-label="Radio 2" />
  <input class="join-item btn" type="radio" name="options" aria-label="Radio 3" />
</x-dui::join>
```

## 渲染结果

```html
<div class="join join-vertical">
  <button class="btn join-item">Button</button>
  <button class="btn join-item">Button</button>
</div>
```
