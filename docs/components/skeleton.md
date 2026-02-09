# Skeleton

DaisyUI [Skeleton](https://daisyui.com/components/skeleton/) 的 Blade 封装。

## 用法

```blade
<x-dui::skeleton class="w-32 h-32" />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| text | bool | false | true, false |

> **注意**: 当 `text` 为 `true` 时，渲染为 `<span>` 并使用 `skeleton-text` 类（文字渐变动画）；否则渲染为 `<div>`（背景色动画）。

## 示例

### 基本占位块
```blade
<x-dui::skeleton class="w-32 h-32" />
```

### 文字骨架屏
```blade
<x-dui::skeleton :text="true">AI is thinking harder...</x-dui::skeleton>
```

### 圆形头像占位
```blade
<x-dui::skeleton class="w-16 h-16 rounded-full" />
```

### 卡片骨架屏布局
```blade
<div class="flex w-52 flex-col gap-4">
  <div class="flex items-center gap-4">
    <x-dui::skeleton class="h-16 w-16 shrink-0 rounded-full" />
    <div class="flex flex-col gap-4">
      <x-dui::skeleton class="h-4 w-20" />
      <x-dui::skeleton class="h-4 w-28" />
    </div>
  </div>
  <x-dui::skeleton class="h-32 w-full" />
</div>
```

### 文章骨架屏布局
```blade
<div class="flex w-52 flex-col gap-4">
  <x-dui::skeleton class="h-32 w-full" />
  <x-dui::skeleton class="h-4 w-28" />
  <x-dui::skeleton class="h-4 w-full" />
  <x-dui::skeleton class="h-4 w-full" />
</div>
```

## 渲染结果

默认（块占位）：
```html
<div class="skeleton w-32 h-32"></div>
```

文字模式：
```html
<span class="skeleton skeleton-text">AI is thinking harder...</span>
```
