# Stack

DaisyUI [Stack](https://daisyui.com/components/stack/) 的 Blade 封装。

## 用法

```blade
<x-dui::stack class="w-32 h-20">
  <div class="grid rounded-box bg-primary text-primary-content place-content-center">1</div>
  <div class="grid rounded-box bg-accent text-accent-content place-content-center">2</div>
  <div class="grid rounded-box bg-secondary text-secondary-content place-content-center">3</div>
</x-dui::stack>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| position | string | null | top, bottom, start, end |

## 示例

### 基本堆叠

```blade
<x-dui::stack class="w-32 h-20">
  <div class="grid rounded-box bg-primary text-primary-content place-content-center">1</div>
  <div class="grid rounded-box bg-accent text-accent-content place-content-center">2</div>
  <div class="grid rounded-box bg-secondary text-secondary-content place-content-center">3</div>
</x-dui::stack>
```

### 堆叠图片

```blade
<x-dui::stack class="w-48">
  <img src="/images/photo-1.webp" class="rounded-box" />
  <img src="/images/photo-2.webp" class="rounded-box" />
  <img src="/images/photo-3.webp" class="rounded-box" />
</x-dui::stack>
```

### 顶部对齐

```blade
<x-dui::stack position="top" class="size-28">
  <div class="text-center border border-base-content card bg-base-100">
    <div class="card-body">A</div>
  </div>
  <div class="text-center border border-base-content card bg-base-100">
    <div class="card-body">B</div>
  </div>
</x-dui::stack>
```

### 起始方向对齐

```blade
<x-dui::stack position="start" class="size-28">
  <div class="text-center border border-base-content card bg-base-100">
    <div class="card-body">A</div>
  </div>
  <div class="text-center border border-base-content card bg-base-100">
    <div class="card-body">B</div>
  </div>
</x-dui::stack>
```

### 通知卡片堆叠

```blade
<x-dui::stack>
  <div class="card shadow-md bg-base-100">
    <div class="card-body">
      <h2 class="card-title">Notification 1</h2>
      <p>You have 3 unread messages.</p>
    </div>
  </div>
  <div class="card shadow-md bg-base-100">
    <div class="card-body">
      <h2 class="card-title">Notification 2</h2>
      <p>You have 3 unread messages.</p>
    </div>
  </div>
</x-dui::stack>
```

## 渲染结果

```html
<div class="stack stack-top">
  <div class="card bg-base-100">
    <div class="card-body">A</div>
  </div>
  <div class="card bg-base-100">
    <div class="card-body">B</div>
  </div>
</div>
```
