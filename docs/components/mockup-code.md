# Mockup Code

DaisyUI [Code Mockup](https://daisyui.com/components/mockup-code/) 的 Blade 封装。

## 用法

```blade
<x-dui::mockup-code>
  <pre data-prefix="$"><code>npm i daisyui</code></pre>
</x-dui::mockup-code>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 单行命令

```blade
<x-dui::mockup-code class="w-full">
  <pre data-prefix="$"><code>npm i daisyui</code></pre>
</x-dui::mockup-code>
```

### 多行输出

```blade
<x-dui::mockup-code class="w-full">
  <pre data-prefix="$"><code>npm i daisyui</code></pre>
  <pre data-prefix=">" class="text-warning"><code>installing...</code></pre>
  <pre data-prefix=">" class="text-success"><code>Done!</code></pre>
</x-dui::mockup-code>
```

### 高亮行

```blade
<x-dui::mockup-code class="w-full">
  <pre data-prefix="1"><code>npm i daisyui</code></pre>
  <pre data-prefix="2"><code>installing...</code></pre>
  <pre data-prefix="3" class="bg-warning text-warning-content"><code>Error!</code></pre>
</x-dui::mockup-code>
```

### 无前缀

```blade
<x-dui::mockup-code class="w-full">
  <pre><code>without prefix</code></pre>
</x-dui::mockup-code>
```

### 自定义颜色

```blade
<x-dui::mockup-code class="bg-primary text-primary-content w-full">
  <pre><code>can be any color!</code></pre>
</x-dui::mockup-code>
```

## 渲染结果

```html
<div class="mockup-code w-full">
  <pre data-prefix="$"><code>npm i daisyui</code></pre>
  <pre data-prefix=">" class="text-warning"><code>installing...</code></pre>
  <pre data-prefix=">" class="text-success"><code>Done!</code></pre>
</div>
```
