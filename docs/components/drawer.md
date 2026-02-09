# Drawer

DaisyUI [Drawer](https://daisyui.com/components/drawer/) 的 Blade 封装。

## 用法

```blade
<x-dui::drawer id="my-drawer">
  <x-dui::drawer.toggle id="my-drawer" />
  <x-dui::drawer.content>
    <label for="my-drawer" class="btn drawer-button">Open drawer</label>
  </x-dui::drawer.content>
  <x-dui::drawer.side>
    <x-dui::drawer.overlay for="my-drawer" />
    <ul class="menu p-4 w-80 min-h-full bg-base-200">
      <li><a>Sidebar Item 1</a></li>
      <li><a>Sidebar Item 2</a></li>
    </ul>
  </x-dui::drawer.side>
</x-dui::drawer>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| end | bool | false | — |
| open | bool | false | — |
| id | string | null | — |

## 子组件

### `<x-dui::drawer.toggle>`

隐藏的 checkbox，控制 drawer 的开关状态。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，通过 attributes 传递 id 等 |

### `<x-dui::drawer.content>`

页面主内容区域。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

### `<x-dui::drawer.side>`

侧边栏容器。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

### `<x-dui::drawer.overlay>`

点击关闭侧边栏的遮罩层。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，通过 attributes 传递 for 等 |

## 示例

### 基本 Drawer

```blade
<x-dui::drawer>
  <x-dui::drawer.toggle id="my-drawer" />
  <x-dui::drawer.content>
    <label for="my-drawer" class="btn drawer-button">Open drawer</label>
  </x-dui::drawer.content>
  <x-dui::drawer.side>
    <x-dui::drawer.overlay for="my-drawer" />
    <ul class="menu p-4 w-80 min-h-full bg-base-200">
      <li><a>Sidebar Item 1</a></li>
      <li><a>Sidebar Item 2</a></li>
    </ul>
  </x-dui::drawer.side>
</x-dui::drawer>
```

### 右侧打开

```blade
<x-dui::drawer :end="true">
  <x-dui::drawer.toggle id="my-drawer-end" />
  <x-dui::drawer.content>
    <label for="my-drawer-end" class="btn">Open drawer</label>
  </x-dui::drawer.content>
  <x-dui::drawer.side>
    <x-dui::drawer.overlay for="my-drawer-end" />
    <ul class="menu p-4 w-80 min-h-full bg-base-200">
      <li><a>Sidebar Item 1</a></li>
    </ul>
  </x-dui::drawer.side>
</x-dui::drawer>
```

### 响应式：大屏常驻

```blade
<x-dui::drawer class="lg:drawer-open">
  <x-dui::drawer.toggle id="my-drawer-responsive" />
  <x-dui::drawer.content>
    <label for="my-drawer-responsive" class="btn drawer-button lg:hidden">Open</label>
  </x-dui::drawer.content>
  <x-dui::drawer.side>
    <x-dui::drawer.overlay for="my-drawer-responsive" />
    <ul class="menu p-4 w-80 min-h-full bg-base-200">
      <li><a>Sidebar Item 1</a></li>
    </ul>
  </x-dui::drawer.side>
</x-dui::drawer>
```

## 渲染结果

```html
<div class="drawer drawer-end">
  <input type="checkbox" class="drawer-toggle" />
  <div class="drawer-content"><!-- content --></div>
  <div class="drawer-side">
    <label class="drawer-overlay" aria-label="close sidebar"></label>
    <!-- sidebar content -->
  </div>
</div>
```
